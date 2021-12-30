#include <iostream>
using namespace std;


int main() {
	int m, n;
	cout << "Nhap m = "; cin >> m;
	cout << "Nhap n = "; cin >> n;
	int a[n], c[m+1][n+1];
	
	for (int i = 1; i <= n; i++){
		cout << "a[" << (i-1) << "] = "; cin >> a[i];
	}
	
	for (int i = 0; i <= m; i++)
		for(int j = 0; j <= n; j++) {
			if(j == 0)
				c[i][j] = (i == 0) ? 1 : 0;
			else 
				c[i][j] = (a[j] > i) ? c[i][j-1] : (c[i][j-1] + c[i-a[j]][j-1]);
		}
	cout << "Co tat ca " << c[m][n] << " cach phan tich.";
}
