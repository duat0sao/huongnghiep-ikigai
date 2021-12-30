#include <iostream>
using namespace std;

const int MAX = 100;
int a[MAX][MAX];
int C(int k, int n) {
   
   if (k == n || k == 0) return 1;
   
   if (a[k][n] == -1)
   		a[k][n] = C(k-1, n-1) + C(k, n-1);
	return a[k][n];
}
int main() {		
	int m,n,k;
	cout<<"Nhap M = "; cin>>m;	
	cout<<"Nhap N = "; cin>>n;
	for (int i = 0; i < MAX; i++)
		for (int j = 0; j < MAX; j++) a[i][j] = -1;
	if(m<n){
		k=m;
		cout <<"So cach = "<<C(k,m+n);
	}
	else {
		k=n;
		cout <<"So cach = "<<C(k,m+n);
	}
}
