#include <iostream>
using namespace std;

const int MAX = 100;
int a[MAX] = {0}, b[MAX], n, count;

void nhap() {
	cout << "Nhap n = ";
	cin >> n;
}

bool OK () {
	int tg  = 0;
	for (int i = 1; i <= n; i++){
		tg += a[i]*(i-1);
	}
	if(tg == n) return true;
	return false;
}

bool khonglap() {
	int tg = 0;
	int mark = 1;
	for (int i = 1; i <= n; i++)
		if(a[i]) tg = tg*10 + (i-1);
	for (int j = 0; j < count; j++)
		if(b[j] == tg) {
			mark = 0;
			return false;
		}
	if(mark) {
		b[count] = tg;
		count++;
		return true;
	}
}

void xuat() {
	if(OK()){
		if(khonglap()){
			for(int i = 1; i <= n; i++){
				if(a[i] == 1 && i-1) cout << i - 1 << " ";
			}
			cout << endl;
		}
	}
}

void sinh (int &ok) {
	int i = n;
	while(i > 0 && a[i]) {
		a[i] = 0;
		i--;
	}
	if ( i > 0) a[i] = 1;
	else ok = 0; // tim duoc xau cuoi cung = > dung
}

void next(int ok) {
	while(ok) { // lap den khi ok = 0
		xuat();
		sinh(ok);
	}
}

int main () {
	count = 0;
	int ok = 1;
	nhap();
	next(ok);
}
