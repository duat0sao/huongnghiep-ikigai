#include<iostream>
using namespace std ; 
const int MAX=100 ;
 int n ,f[MAX];
int main()
{
	cout << "N = "; cin >> n;
	f[0]=1,f[1]=1 ;
	for(int i = 2 ;i <= n;i++) f[i]= f[i-1] + 2*f[i-2] ;
	cout<<"So phuong an = "<<f[n] ;

	
}
