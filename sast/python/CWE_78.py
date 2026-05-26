import os
import subprocess

def process_user_input():
    # Get user input for a file to search
    filename = input("Enter a filename to search for: ")

    # VULNERABLE CODE: Directly using user input in a command
    command = f"find / -name {filename}"
    print(f"Executing command: {command}")

    # Execute the command using shell=True (makes it particularly vulnerable)
    result = subprocess.call(command, shell=True)  # WEAKNESS: CWE-78

    # Display results
    if result == 0:
        print("File found!")
    else:
        print("File not found or error occurred.")

if __name__ == "__main__":
    print("File Search Utility")
    print("-------------------")
    process_user_input()
