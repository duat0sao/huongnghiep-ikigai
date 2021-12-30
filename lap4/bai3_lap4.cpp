#include<iostream>
using namespace std ; 

const int MAX = 200;
int k, a[MAX][MAX];

int f(int k, int n){
	if(n == 1){
		if(k == 1) return 1;
		else return 0;
	}
	int h = k - n;
	if (a[k][n] == -1){
		if(h == 0) a[k][n] = f(k, n-1) + 1;
			else if(h < n) a[k][n] = f(k, n-1) + f(h, h);
			else a[k][n] = f(k, n-1) + f(h, n-1);
	}
	return a[k][n];
}

int main()
{
	for(int i = 0; i < MAX; i++)
		for(int j = 0; j < MAX; j++)
			a[i][j] = -1;
	cout << "Nhap k = "; cin >> k;
	cout << "Co tat ca " << f(k,k) - 1 << " cach phan tich.";
}
