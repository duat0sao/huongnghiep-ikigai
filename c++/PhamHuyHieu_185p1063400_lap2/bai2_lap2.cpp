#include <iostream>
#include <map>
using namespace std;

map<int, long long> a;
int n;

long long f(int n) {
	if(n == 3 || n == 1) return n;
	
	auto p = a.find(n);
	if(p != a.end()) return p -> second;
	
	long long r = 0;
	
	if (n  % 2 == 0) r = f(n / 2);
	else {
		int m = n / 4;
		if (n % 4 == 1) r = 2 * f(2 * m + 1) - f(m);
		else r = 3 * f( 2 * m + 1) - 2 * f(m);
	}
	
	a[n] = r;
	
	return r;
	 
}

int main() {
	cout << "Nhap n = "; cin >>  n;
	cout << "g(" << n << ") = " << f(n);
}
