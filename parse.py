import re
import sys
import xml.etree.ElementTree as ET

frames = ["GF", "LF", "TF"]
types = ["int", "string", "bool", "nil"]


def createProg():
    print ("creating Prog")
    print("")

def createFunc(x, orderCount=[0]):
    orderCount[0] += 1
    print(f"order: {orderCount[0]}")
    print (f"opcode: {x}")
    print("")

def createVar(x):
    splited = x.split("@")
    if splited[0] in frames:
        print (f"Type: var")
        print (f"Name: {x}")
        print("")
    else:
        print(f"'{x}' is not a variable.")
        sys.exit(22)

def createSymb(x):
    splited = x.split("@", 1)

    if splited[0] in frames:
        createVar(x)
    elif splited[0] in types:
        if splited[0] == "string" and splited[1] == "":
            print (f"Type: {splited[0]}")
            print (f"Name: ")
            print("")
        elif splited[0] == "nil":
            if splited[1] == "nil":
                print (f"Type: {splited[0]}")
                print (f"Name: {splited[1]}")
                print("")
            else:
                print("wrong usage of nil")
                sys.exit(22)
        elif not splited[1] == "" and not splited[1] == "nil":
            print (f"Type: {splited[0]}")
            print (f"Name: '{splited[1]}'")
            print("")
        else:
            print("wrong symbol.")
            sys.exit(22)
    else:
        print(f"'{x}' is not a symbol or variable.")
        sys.exit(22)

def createLabel(x):
    print (f"Type: label")
    print (f"Name: {x}")
    print("")

def createType(x):
    if x in types:
        print (f"Type: type")
        print (f"Name: {x}")
        print("")
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
    # Create the root element
    root = ET.Element("program")
    root.set("language", "IPPcode24")

    # Create the ElementTree
    tree = ET.ElementTree(root)

    found = False
    while found == False:
        first_line = sys.stdin.readline()
        if not first_line.strip().startswith('#'):
                found = True
    first_line = re.sub(r'#.*', '', first_line).strip()
    if first_line.upper() == ".IPPCODE24":
        print("") # pomocna newline  !!!!
        createProg()
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
                        for i in range(len(expected_funcs)):
                            expected_funcs[i](words[i])
                else:
                    print(f"No functions found for command '{words[0]}'.")
                    sys.exit(22)
    else:
        print("Error: The first line is not '.IPPcode24'. Exiting.", file=sys.stderr)
        sys.exit(21)

if __name__ == "__main__":
    main()
