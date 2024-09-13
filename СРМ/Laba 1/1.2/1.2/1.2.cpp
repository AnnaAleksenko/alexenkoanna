#include <time.h>
#include <iomanip>
#include <iostream>
using namespace std;

int main()
{
	int a = 10;
	int b = 1;  
	int j;     
	int c = pow(10, 7); //количество 

	clock_t start = clock();
	for (j = 1; j <= c; j++) {
		b = 1; // для нового расчета факториала
		for (int i = 1; i <= a; i++) {
			b *= i; //  факториал
		}
	}
	clock_t end = clock();
	double seconds = (double)(end - start) / CLOCKS_PER_SEC;
	cout << fixed << setprecision(100) << seconds;
}


