import re
import sys
import xml.etree.ElementTree as ET
import xml.dom.minidom

frames = ["GF", "LF", "TF"]
types = ["int", "string", "bool", "nil"]

def createProg():
    return ET.Element("program", language="IPPcode24")

def createFunc(root, opcode, orderCount=[0]):
    orderCount[0] += 1
    instruction = ET.SubElement(root, "instruction", order=str(orderCount[0]), opcode=opcode)
    return instruction

def createVar(root, x, argCount):
    splited = x.split("@", 1)
    if splited[0] in frames and not splited[1] == "":
        arg = ET.SubElement(root, f"arg{argCount}", type="var")
        arg.text = x
    else:
        print(f"'{x}' is wrong variable.")
        sys.exit(22)

def createSymb(root, x, argCount):
    splited = x.split("@", 1)

    if splited[0] in frames:
        argCount = createVar(root, x, argCount)
    elif splited[0] in types:
        arg = ET.SubElement(root, f"arg{argCount}", type=splited[0])
        if splited[0] == "string":
            arg.text = f"{splited[1]}"
        elif splited[0] == "nil":
            if splited[1] == "nil":
                arg.text = "nil"
            else:
                print("wrong usage of nil")
                sys.exit(22)
        elif not splited[1] == "" and not splited[1] == "nil":
            arg.text = f"{splited[1]}"
        else:
            print("wrong symbol.")
            sys.exit(22)
    else:
        print(f"'{x}' is not a symbol or variable.")
        sys.exit(22)

def createLabel(root, x, argCount):
    arg = ET.SubElement(root, f"arg{argCount}", type="label")
    arg.text = x

def createType(root, x, argCount):
    if x in types:
        arg = ET.SubElement(root, f"arg{argCount}", type="type")
        arg.text = x
    else:
        print(f"'{x}' is not a type.")
        sys.exit(22)

function_dict = {
    'MOVE': [createFunc, createVar, createSymb],
    'CREATEFRAME': [createFunc],
    'PUSHFRAME': [createFunc],
    'POPFRAME': [createFunc],
    'DEFVAR': [createFunc, createVar],
    'CALL': [createFunc, createLabel],
    'RETURN': [createFunc],
    'PUSHS': [createFunc, createSymb],
    'POPS': [createFunc, createSymb],
    'ADD': [createFunc, createSymb, createSymb],
    'SUB': [createFunc, createSymb, createSymb],
    'MUL': [createFunc, createSymb, createSymb],
    'IDIV': [createFunc, createSymb, createSymb],
    'INT2CHAR': [createFunc, createSymb],
    'STRI2INT': [createFunc, createSymb, createSymb],
    'READ': [createFunc, createVar, createType],
    'WRITE': [createFunc, createSymb],
    'CONCAT': [createFunc, createVar, createSymb, createSymb],
    'STRLEN': [createFunc, createSymb],
    'GETCHAR': [createFunc, createSymb, createSymb],
    'SETCHAR': [createFunc, createSymb, createSymb],
    'TYPE': [createFunc, createSymb],
    'LABEL': [createFunc, createLabel],
    'JUMP': [createFunc, createLabel],
    'JUMPIFEQ': [createFunc, createLabel, createSymb, createSymb],
    'JUMPIFNEQ': [createFunc, createLabel, createSymb, createSymb],
    'EXIT': [createFunc, createSymb],
    'DPRINT': [createFunc, createSymb],
    'BREAK': [createFunc],
    'LT': [createFunc, createVar, createSymb, createSymb],
    'GT': [createFunc, createVar, createSymb, createSymb],
    'EQ': [createFunc, createVar, createSymb, createSymb],
    'AND': [createFunc, createVar, createSymb, createSymb],
    'OR': [createFunc, createVar, createSymb, createSymb],
    'NOT': [createFunc, createVar, createSymb, createSymb],
}

def main():
    root = createProg()
    found = False
    while not found:
        first_line = sys.stdin.readline()
        if not first_line.strip().startswith('#'):
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
                if words[0] in function_dict:
                    expected_funcs = function_dict[words[0]]
                    if len(words) != len(expected_funcs):
                        print(f"Error: Incorrect number of arguments for command '{words[0]}'. Expected {len(expected_funcs)}, got {len(words)}.")
                        sys.exit(22)
                    else:
                        instruction = expected_funcs[0](root, words[0])
                        argCount = 0
                        for i in range(1, len(expected_funcs)):
                            argCount +=1
                            expected_funcs[i](instruction, words[i], argCount)
                else:
                    print(f"No functions found for command '{words[0]}'.")
                    sys.exit(22)

        """""      
        for instruction in root.findall('instruction'):
            if len(instruction) == 0:
                instruction.text = '\n    '
            for arg in instruction:
                if arg.text == "":
                    arg.text = ' '
        """
        xml_str = ET.tostring(root, encoding="utf-8")
        xml_str = xml.dom.minidom.parseString(xml_str).toprettyxml(indent="    ", encoding="UTF-8")
        sys.stdout.buffer.write(xml_str)

    else:
        print("Error: The first line is not '.IPPcode24'. Exiting.", file=sys.stderr)
        sys.exit(21)

if __name__ == "__main__":
    main()
