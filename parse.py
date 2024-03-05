import re
import sys
import xml.etree.ElementTree as ET
import xml.dom.minidom

class Program:
    def __init__(self):
        self.root = ET.Element("program", language="IPPcode24")

    def add_instruction(self, opcode, order_count):
        order_count[0] += 1
        return Instruction(self.root, opcode, order_count[0])

    def get_xml(self):
        xml_str = ET.tostring(self.root, encoding="utf-8")
        return xml.dom.minidom.parseString(xml_str).toprettyxml(indent="    ", encoding="UTF-8")

class Instruction:
    def __init__(self, root, opcode, order):
        self.instruction = ET.SubElement(root, "instruction", order=str(order), opcode=opcode)

    def add_argument(self, arg_count, arg_type, arg_value):
        arg = ET.SubElement(self.instruction, f"arg{arg_count}", type=arg_type)
        arg.text = arg_value

class IPPCodeInterpreter:
    def __init__(self):
        self.frames = ["GF", "LF", "TF"]
        self.types = ["int", "string", "bool", "nil"]
        self.type_reg = {"int": r'-*[0-9]+', "bool": r'(false|true)', "string": r'[^ ]*', "nil": r'nil'}
        self.function_dict = {
            'MOVE': [self.create_var, self.create_symb],
            'CREATEFRAME': [],
            'PUSHFRAME': [],
            'POPFRAME': [],
            'DEFVAR': [self.create_var],
            'CALL': [self.create_label],
            'RETURN': [],
            'PUSHS': [self.create_symb],
            'POPS': [self.create_symb],
            'ADD': [self.create_var, self.create_symb, self.create_symb],
            'SUB': [self.create_var, self.create_symb, self.create_symb],
            'MUL': [self.create_var, self.create_symb, self.create_symb],
            'IDIV': [self.create_var, self.create_symb, self.create_symb],
            'INT2CHAR': [self.create_var, self.create_symb],
            'STRI2INT': [self.create_var, self.create_symb, self.create_symb],
            'READ': [self.create_var, self.create_type],
            'WRITE': [self.create_symb],
            'CONCAT': [self.create_var, self.create_symb, self.create_symb],
            'STRLEN': [self.create_var, self.create_symb],
            'GETCHAR': [self.create_var, self.create_symb, self.create_symb],
            'SETCHAR': [self.create_var, self.create_symb, self.create_symb],
            'TYPE': [self.create_var, self.create_symb],
            'LABEL': [self.create_label],
            'JUMP': [self.create_label],
            'JUMPIFEQ': [self.create_label, self.create_symb, self.create_symb],
            'JUMPIFNEQ': [self.create_label, self.create_symb, self.create_symb],
            'EXIT': [self.create_symb],
            'DPRINT': [self.create_symb],
            'BREAK': [],
            'LT': [self.create_var, self.create_symb, self.create_symb],
            'GT': [self.create_var, self.create_symb, self.create_symb],
            'EQ': [self.create_var, self.create_symb, self.create_symb],
            'AND': [self.create_var, self.create_symb, self.create_symb],
            'OR': [self.create_var, self.create_symb, self.create_symb],
            'NOT': [self.create_var, self.create_symb, self.create_symb],
        }

    def create_var(self, instruction, x, argCount):
        if '@' not in x:
            print(f"'{x}' - Variable name is missing '@'.", file=sys.stderr)
            sys.exit(23)
        splited = x.split("@", 1)
        if splited[0] in self.frames and not splited[1] == "" and not splited[1][0].isdigit():
            instruction.add_argument(argCount, "var", x)
        else:
            print(f"'{x}' - Invalid variable.", file=sys.stderr)
            sys.exit(23)

    def create_symb(self, instruction, x, argCount):
        if '@' not in x:
            print(f"'{x}' - Variable name is missing '@'.", file=sys.stderr)
            sys.exit(23)
        splited = x.split("@", 1)

        if splited[0] in self.frames:
            self.create_var(instruction, x, argCount)
        elif splited[0] in self.types:
            arg_type = splited[0]
            if splited[0] == "string":
                arg_value = splited[1]
            elif splited[0] == "nil":
                if splited[1] == "nil":
                    arg_value = "nil"
                else:
                    print("Error: Wrong usage of 'nil'.", file=sys.stderr)
                    sys.exit(23)
            elif not splited[1] == "" and not splited[1] == "nil":
                if re.fullmatch(self.type_reg[splited[0]], splited[1]):
                    arg_value = splited[1]
                else:
                    print("Error: Value doesn't match the type.", file=sys.stderr)
                    sys.exit(23)
            else:
                print("Error: Invalid symbol.", file=sys.stderr)
                sys.exit(23)
            instruction.add_argument(argCount, arg_type, arg_value)
        else:
            print(f"'{x}' - Not a valid symbol or variable.", file=sys.stderr)
            sys.exit(23)

    def create_label(self, instruction, x, argCount):
        instruction.add_argument(argCount, "label", x)

    def create_type(self, instruction, x, argCount):
        if x in self.types:
            instruction.add_argument(argCount, "type", x)
        else:
            print(f"'{x}' - Not a valid type.", file=sys.stderr)
            sys.exit(23)

    def parse(self):
        program = Program()
        order_count = [0]

        found = False
        while not found:
            first_line = sys.stdin.readline()
            if not first_line.strip().startswith('#') and not first_line.strip() == "":
                found = True

        first_line = re.sub(r'#.*', '', first_line).strip()
        if first_line.upper() == ".IPPCODE24":
            for line in sys.stdin:
                if line.strip().startswith('#'):
                    continue
                line = re.sub(r'#.*', '', line)
                line = line.strip()
                words = line.split()
                if len(words) > 0:
                    words[0] = words[0].upper()
                if words:
                    if words[0] in self.function_dict:
                        expected_funcs = self.function_dict[words[0]]
                        if len(words) != len(expected_funcs) + 1:
                            print(
                                f"Error: Incorrect number of arguments for command '{words[0]}'. Expected {len(expected_funcs)}, got {len(words) - 1}.", file=sys.stderr)
                            sys.exit(22)
                        else:
                            instruction = program.add_instruction(words[0], order_count)
                            for arg_count, func in enumerate(expected_funcs, start=1):
                                func(instruction, words[arg_count], arg_count)
                    else:
                        print(f"No functions found for command '{words[0]}'.", file=sys.stderr)
                        sys.exit(22)

            xml_str = program.get_xml()
            sys.stdout.buffer.write(xml_str)
        else:
            print("Error: The first line is not '.IPPcode24'. Exiting.", file=sys.stderr)
            sys.exit(21)

if __name__ == "__main__":
    interpreter = IPPCodeInterpreter()
    interpreter.parse()
