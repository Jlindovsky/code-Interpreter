## Implementační dokumentace k 1. úloze do IPP 2023/2024

- Jméno a příjmení: Jan_Lindovsky
- Login: xlindo04

### Třída Program

Tato třída slouží k reprezentaci programu v jazyce IPPcode24.

- `__init__(self)`: Inicializuje objekt třídy Program a vytváří kořenový element XML reprezentace programu.
- `add_instruction(self, opcode, order_count)`: Metoda přidává novou instrukci do programu s daným operátorem (opcode) a pořadovým číslem. Inkrementuje pořadové číslo instrukce.
- `get_xml(self)`: Metoda vrátí XML reprezentaci programu jako řetězec.

### Třída Instruction

Tato třída slouží k reprezentaci instrukcí v programu.

- `__init__(self, root, opcode, order)`: Inicializuje objekt třídy Instruction a vytváří nový element XML reprezentující instrukci s daným operátorem (opcode) a pořadovým číslem.
- `add_argument(self, arg_count, arg_type, arg_value)`: Metoda přidává nový argument (argument instrukce) do instrukce s daným typem a hodnotou.

### Třída IPPCodeInterpreter

Tato třída slouží k interpretaci zdrojového kódu v jazyce IPPcode24.

- `__init__(self)`: Inicializuje objekt třídy IPPCodeInterpreter. Definuje rámce (GF, LF, TF), typy (int, string, bool, nil) a regulární výrazy pro typy. Je použit funkční slovník pro mapování instrukcí IPPcode24 na funkce, které mají zpracovat jednotlivé argumenty těchto instrukcí. Klíčem je název instrukce a hodnotou jsou seznamy funkcí.

- `create_var(self, instruction, x, argCount)`: Metoda pro vytváření proměnných (var) v instrukcích. Kontroluje formát proměnných a přidává je do instrukce.
- `create_symb(self, instruction, x, argCount)`: Metoda pro vytváření symbolů (symb) v instrukcích. Kontroluje formát symbolů a přidává je do instrukce.
- `create_label(self, instruction, x, argCount)`: Metoda pro vytváření návěští (label) v instrukcích. Přidává návěští do instrukce.
- `create_type(self, instruction, x, argCount)`: Metoda pro vytváření typů (type) v instrukcích. Kontroluje formát typů a přidává je do instrukce.
- `parse(self)`: Metoda pro parsování zdrojového kódu v IPPcode24. Načítá vstup ze standardního vstupu a vytváří XML reprezentaci programu.

  Metoda nejprve inicializuje instanci třídy `Program`, která bude sloužit k reprezentaci programu v XML formátu. Dále inicializuje proměnnou `order_count` pro sledování pořadí instrukcí. Poté čte vstupní data ze standardního vstupu (stdin) po řádcích.

  Pro kontrolu, zda první řádek obsahuje hlavičku ".IPPcode24", metoda analyzuje každý řádek a odstraňuje komentáře (řádky začínající znakem `#`). Pokud nenajde prázdný řádek, získává první řádek bez komentářů a odstraňuje případné mezery na začátku a konci řetězce.

  Pokud první řádek odpovídá očekávané hlavičce ".IPPcode24", metoda začíná číst další řádky a provádí analýzu každé instrukce. Opět odstraňuje komentáře a provádí rozdělení na jednotlivá slova. První slovo (opcode) je převedeno na velká písmena pro snadnější porovnání s funkcemi v `function_dict`.

  Následně metoda zkontroluje, zda je opcode instrukce obsažen v `function_dict`. Pokud ano, získá seznam očekávaných funkcí pro zpracování argumentů. Kontroluje také, zda je správný počet argumentů pro danou instrukci. Pokud je vše v pořádku, vytvoří instanci instrukce pomocí metody `add_instruction` z třídy `Program` a volá odpovídající funkce pro zpracování argumentů.

Nakonec, metoda získá XML reprezentaci programu pomocí metody `get_xml` a vypíše ji na standardní výstup.

### Funkce main()

Hlavní funkce skriptu. Vytváří argument parser pro zpracování příkazové řádky a volá metodu parse na objektu IPPCodeInterpreter.
