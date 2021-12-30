#include<iostream>
using namespace std;

const int MAX = 10000000;

long long f[MAX];

long long fibo(int n) {
	if (n < 2) return n;
	if (f[n] = -1)
		f[n] = fibo(n-1) + fibo(n-2);
	return f[n];
}

int main() {
	
	long k; 
	int dem = 0;
	long long n;
	cin >> k;
	if (k < 0) cout << "0";
	else {
		n = k + 5;
	
		for(int i = 0; i < k + 5; i++) f[i] = -1;
		
		while(dem <= n) {
			if(fibo(dem) > k) {
				cout << fibo(dem) << endl;
				break;
			}
			dem++;
		}
	}
	
	
	return 0;
}
