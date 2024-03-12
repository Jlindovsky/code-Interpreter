# Implementační dokumentace k 1. úloze do IPP 2023/2024

- Jméno a příjmení: Jan_Lindovsky
- Login: xlindo04

# Třída Program

Tato třída slouží k reprezentaci programu v jazyce IPPcode24.

- `__init__(self)`: Inicializuje objekt třídy Program a vytváří kořenový element XML reprezentace.
- `add_instruction(self, opcode, order_count)`: Metoda přidává novou instrukci do programu s daným operátorem (opcode) a pořadovým číslem. Inkrementuje pořadové číslo instrukce.
- `get_xml(self)`: Metoda vrátí XML reprezentaci programu jako řetězec.

# Třída Instruction

Tato třída slouží k reprezentaci instrukcí v programu.

- `__init__(self, root, opcode, order)`: Inicializuje objekt třídy Instruction a vytváří nový element XML reprezentující instrukci s daným operátorem (opcode) a pořadovým číslem.
- `add_argument(self, arg_count, arg_type, arg_value)`: Metoda přidává nový argument (argument instrukce) do instrukce s daným typem a hodnotou.

# Třída IPPCodeInterpreter

Tato třída slouží k interpretaci zdrojového kódu v jazyce IPPcode24.

- `__init__(self)`: Inicializuje objekt třídy IPPCodeInterpreter a definuje rámce (frames), typy (types) a regulární výrazy pro typy (type_reg).
- `create_var`, `create_symb`, `create_label`, `create_type`: Tyto metody slouží k vytváření různých prvků instrukcí jako jsou proměnné (var), symboly (symb), návěští (label) a typy (type).
- `parse(self)`: Metoda pro parsování zdrojového kódu. Načítá vstup ze standardního vstupu a vytváří XML reprezentaci programu.

## Funkce main()

Hlavní funkce skriptu. Vytváří argument parser pro zpracování příkazové řádky a volá metodu parse na objektu IPPCodeInterpreter.
