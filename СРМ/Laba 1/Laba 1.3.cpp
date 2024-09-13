#include <thread>
#include <iostream>
#include <mutex>
#include <string>
using namespace std;

void Func(string name)
{
    int a = 10;
    int b = 1;
    int j;
    int c = pow(10, 7); //количество 

    for (j = 1; j <= c; j++) {
        b = 1; // для нового расчета факториала
        for (int i = 1; i <= a; i++) {
            b *= i; //  факториал
        }
    }
}

int main()
{

    clock_t start = clock();

    // запускаем и создам потоки
    std::thread thread1(Func, "t1");
    std::thread thread2(Func, "t2");

    thread1.join();
    thread2.join();

    clock_t end = clock();
    double seconds = (double)(end - start) / CLOCKS_PER_SEC;
    std::cout << "Together: " << seconds << " sec" << std::endl;

    // время  последовательно
    start = clock();

    Func("t1");
    Func("t2");

    end = clock();
    seconds = (double)(end - start) / CLOCKS_PER_SEC;
    std::cout << "Seperatly: " << seconds << " sec" << std::endl;

    return 0;
}
