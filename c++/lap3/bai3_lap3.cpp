#include<iostream>
using namespace std;

const int MAX = 50;
const int n=4;
const int s=5;
int  a[]={0,1,2,3,4}; 

int c[s+1][n+1];

int F(int s,int n){
	if (n==0) return (s==0) ? 1 : 0;
	if (c[s][n] == -1){
		if (a[n]<=s) c[s][n] = (s, n-1) + F(s-a[n], n-1);
		else c[s][n] = F(s, n-1);
	}
	return c[s][n];
}

//void sinh(int k, int p, int a[])
//{
//	if(p == m)
//	{
//		dem++;
//		return;
//	}
//	for(int i=k; i<n; i++)
//	{
//		if(p+a[i] <= m)
//		{
////			if (a[i] == m) dem++;
//			sinh(i+1,p+a[i],a);
//		}	
//		else return;
//	}
//}

int main()
{
	for(int i= 0; i<=s; i++)
		for(int j=0; j<=n; j++) c[i][j] = -1;
	cout<< F(s,n);
}

//int main()
//{
//	cout<<"Nhap m = ";cin>>m;
//	cout<<"Nhap n = ";cin>>n;
//	int a[n];
//	for(int i=0;i<n;i++)
//	{
//		cout<<"a["<<i<<"] = ";cin>>a[i];
//	}
//	sinh(0,0,a);
//	cout<<"Co tat ca "<<dem<<" cach phan tich.";
//	return 0;
//}
