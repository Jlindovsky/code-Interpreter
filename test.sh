#!/bin/bash

# Set default values
JEXAMXML_PATH="./jexamxml.jar"
TESTS_DIR="./Archiv"
MAKE_OUT=true

# Colors for output
GREEN='\033[0;32m' # Green color for similarity
RED='\033[0;31m'   # Red color for difference
YELLOW='\033[0;33m'
NC='\033[0m'       # No color

# Function to print usage information
print_usage() {
    echo "Usage: $0 [-j JEXAMXML_PATH] [-d TESTS_DIR] [-b]"
    echo "Options:"
    echo "  -j: Path to jExamXML (default: ./jexamxml.jar)"
    echo "  -d: Directory containing XML files (default: ./Archiv)"
    echo "  -b: Enable output comparison mode (default: true)"
}

# Parse command-line arguments
while getopts ":j:d:b" opt; do
    case $opt in
        j) JEXAMXML_PATH="$OPTARG" ;;
        d) TESTS_DIR="$OPTARG" ;;
        b) MAKE_OUT="$OPTARG" ;;
        \?) echo "Invalid option: -$OPTARG" >&2; print_usage; exit 1 ;;
        :) echo "Option -$OPTARG requires an argument." >&2; print_usage; exit 1 ;;
    esac
done

# Iterate over XML files in the specified directory
for file in "$TESTS_DIR"/*.src; do
    if [ -f "$file" ]; then
        echo "Processing file: $file"
        
        # Generate XML output if MAKE_OUT is true
        if [ "$MAKE_OUT" == "true" ]; then
            python3 parse.py < "$file" > "./tst.xml"
            ERROR_CODE=$?

            # Compare XML files using jExamXML

            comparison_output=$(java -jar "$JEXAMXML_PATH" "${file%.src}.out" "./tst.xml" "./options")
        
            TMP=$(cat "${file%.src}.rc")
            if [ "$ERROR_CODE" == "$TMP" ]; then
                    echo -e "${GREEN}$ERROR_CODE == $TMP${NC}"
                else
                    echo -e "${RED}$ERROR_CODE != $TMP${NC}"
                fi

            # Check if the output indicates similarity or difference
            if [[ $comparison_output == *"are identical"* ]]; then
                echo -e "${GREEN}$comparison_output${NC}"
            elif [[ $comparison_output == *"are not identical"* ]]; then
                echo -e "${RED}$comparison_output${NC}"
            elif [[ $comparison_output == *"See log file"* ]]; then
                echo -e "${YELLOW}$comparison_output${NC}"
            else
                echo "$comparison_output"
            fi

            trash=$(rm -r $TESTS_DIR/*.log)
            
        else
            # Generate XML output without comparison
            python3 parse.py < "$file" > "${file%.src}.out"
            echo $? > "${file%.src}.rc" 
        fi
        
        echo "----------------------------------------"
    fi
done
