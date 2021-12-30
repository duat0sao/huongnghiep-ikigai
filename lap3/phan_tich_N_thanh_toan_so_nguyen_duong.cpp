#include <iostream>
using namespace std;

const int MAX=100;
int a[MAX], N;

void print(int n)
{	
	cout<<N<<" = ";
	for(int i=0; i<n; i++) cout <<a [i] << "+";
	
	cout <<a[n] << endl;
}

bool check(int i, int n)
{
	if (n==0) return true;
	else{
		if (i<=a[n-1])	return true;
		else return false;	}
}
int m=0;
void gen(int n=0)
{
	for (int i=N; i>=1; i--){
		if (check(i,n)){
			a[n] = i;	
			m += i;
			if (m == N)	print(n);
			else if (m<N)
				gen(n+1); 
				m -= i;
		}
	}
}
int main()
{
	cout<<"Nhap n = ";cin>>N;
	gen();
}
