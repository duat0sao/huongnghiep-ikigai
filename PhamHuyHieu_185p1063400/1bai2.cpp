#include <iostream>
#include <algorithm>
using namespace std;

int  n, dem = 0;

void nhapmang(int a[])
{
	for (int i=0; i<n; i++)	cin>> a[i];	
}

void capsocong(int a[]){
	for (int i = 0; i < n; i++)
		for(int j = i+1; j < n; j++)
			for(int k = j+1; k < n; k++)
				for(int m = k+1; m < n; m++)
					for(int d = m+1; d < n; d++)
						if((a[d] - a[m]) == (a[m] - a[k]) && (a[m] - a[k]) == (a[k] - a[j]) && (a[k] - a[j]) == (a[j] - a[i]))
							dem++;				
						
							
	cout << dem;
}


int main(){
	
	cin >> n;
	int a[n];
	
	nhapmang(a);
	sort(a, a+n);
	capsocong(a);
	return 0;
}
