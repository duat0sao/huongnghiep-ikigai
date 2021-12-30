#include<iostream>
#include <map>
using namespace std;

map<int, long long> a;

long long fibo(int n) {
	if (n < 2) return n;
	
	auto p = a.find(n);
	if(p != a.end()) return p -> second;
	
	long long r = 0;
	r = fibo(n-1) + fibo(n-2);
	a[n] = r;
	
	return r;
}

int main() {
	
	long long k; 
	long long dem = 0;
	cin >> k;
	if (k < 0) cout << "0";
	else {		
		while(dem <= k) {
			if(fibo(dem) > k) {
				cout << fibo(dem) << endl;
				break;
			}
			dem++;
		}
	}

}
