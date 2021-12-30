#include <iostream>
#include <algorithm> 
using namespace std;

const int MAX = 100;
int b[5], n, a[MAX], demcsc = 0,  k = 1, c = 0, d = 1;

void print(){
	for(int i = 0; i < 5; i++)
		cout << " " << b[i];
	cout << endl;
}

int csc(int c, int d) {
	if(d == n && c == n-1) return demcsc;
	b[0] = a[c];
	b[1] = a[d];
	int hieu = b[1] - b[0];
	for(int i = 0; i < n; i++){
		if(a[i] - b[k] == hieu){
			k++;
			b[k] = a[i];
			if(k == 4) {
				demcsc++;
				print();
				c++;
				d++;
				k = 1;
				csc(c,d);
			}
		}
		
	}
	
	d++;
	csc(c,d);
	return demcsc;
}


int main () {
	
	cin >> n;
	for (int i = 0; i < n; i++) {
		cin >> a[i];
	}
	sort(a, a+n);
	cout << endl << csc(c, d);
	
	return 0;
}
