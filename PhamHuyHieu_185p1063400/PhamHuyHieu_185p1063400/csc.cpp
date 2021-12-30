#include <iostream>
#include <algorithm> 
using namespace std;

const int MAX = 100;
int b[5], n, a[MAX], dem = 0;

bool csc(int a[]) {
	bool kt = true;
	for(int i=0; i+2 < 5; i++)
    	if(a[i+2]-a[i+1]!=a[i+1]-a[i]){
    		kt = false;
		}	
		
	return kt;
}

void gen(int k) {
	if (k > n) { 
		for (int i = 0; i<5; i++){
			cout << b[i] << " ";
		}
		if(csc(b)) dem++;
		return; 
	}
	
	for (int i = b[k-1] + 1; i <= n+5-k; i++) {
		b[k] = a[k]; gen(k+1);
	}
}

int main () {
	
	cin >> n;
	for (int i = 0; i < n; i++) {
		cin >> a[i];
	}
	sort(a, a+n);
	gen(0);
	
	cout << dem;
	return 0;
}
