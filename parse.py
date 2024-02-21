import re
import sys

def createProg():
    print ("creating Prog")
def createFunc(x):
    print (f"creating func: {x}")
def createVar(x):
    print (f"creating var: {x}")
def createSymb(x):
    print (f"creating symb: {x}")
def createLabel(x):
    print (f"creating label: {x}")
def createType(x):
    print (f"creating type {x}")

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
    'CONCAT': [createFunc, createSymb, createSymb],
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
    # Read the first line from standard input
    first_line = sys.stdin.readline()
    first_line = re.sub(r'#.*', '', first_line).strip()
    # Check if the first line is ".IPPcode24"
    if first_line == ".IPPcode24":
        print("") # pomocna newline  !!!!
        createProg()
        for line in sys.stdin:
            line = re.sub(r'#.*', '', line)
            line = line.strip()
            words = line.split()
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
