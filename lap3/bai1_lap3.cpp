#include <iostream>
using namespace std;

const int MAX = 100;

int m, n, a[MAX];

void print() {
	cout << n << " = ";
	for (int i = 1; i < m; i++) cout << a[i] << "+";
	cout << a[m] << endl;
}

void sinh(int k, int p) {
	if (k == m) {
		a[k] = n - p;
		print();
		return;
	}
	for (int i = 1; i <= n - p - m + k; i++){
		a[k] = i;
		sinh(k + 1, p + i);
	}
}

int main() {
	cout << "Nhap n = "; cin >> n;
	cout << "Nhap m = "; cin >> m;
	sinh(1, 0);
}
