#include <thread>
#include <mutex>
#include <string>
#include <chrono>
#include <iostream>

std::mutex m; 

void Func(std::string name) 
{
    long double i = 0;
    auto start = std::chrono::steady_clock::now(); 
    auto end = start + std::chrono::milliseconds(1000); 

    while (std::chrono::steady_clock::now() < end) 
    {
        i += 1e-9; 
    }

    m.lock();
    std::cout << name << ": " << i << std::endl;
    m.unlock();

}

int main() {
    std::thread thread1(Func, "t1");
    std::thread thread2(Func, "t2");
    std::thread thread3(Func, "t3");

    thread1.join();
    thread2.join();
    thread3.join();


    return 0;
}
