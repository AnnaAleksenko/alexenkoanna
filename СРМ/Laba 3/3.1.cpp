#include <iostream>
#include <conio.h>
#include <stdio.h>
#include <string>

int main()
{
    clock_t start, end;
    start = clock();
    std::cout << "Press anykey to start\n";
    char x = _getch();
    std::cout << "start - " << x << std::endl;

    std::string text = "Please>call me now i love you <3";
    std::string text1 = "I've never felt like this before <33";
    bool buttonPressed = false;

    while (!_kbhit()) {
        end = clock();
        if ((double)(end - start) / CLOCKS_PER_SEC >= 1) {
            if (buttonPressed) {
                std::cout << text1 << std::endl;
            }
            else {
                std::cout << text << std::endl;
            }
            start = clock();
        }

        if (_kbhit()) {
            char key = _getch();

            if (key == 's' || key == 'S') { 
                std::cout << "Exit from the program" << std::endl;
                break;
            }
            else if (key == 'a' || key == 'A') { 
                buttonPressed = !buttonPressed;
                std::cout << "Button a/A is pressed" << std::endl;

            }
            else {
                std::cout << "Another button is pressed. ";
                std::cout << "Pleaseee enter the new text: ";
                std::getline(std::cin, text);
                std::cout << "New text : " << text << std::endl;
            }
        }
    }

    return 0;
}
