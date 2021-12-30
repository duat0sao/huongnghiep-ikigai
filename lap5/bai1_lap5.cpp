#include <iostream>
#include <string>
using namespace std;

string daochuoi(string s){
	int k = s.size();
	string w = s;
	for(int i = 0; i < k; i++){
		w[i] = s[k - i - 1];
	}
	return w;
}

int main() {
	int MAX = 100000, n;
	string w;
	getline(cin, w);	
	
	cin >> n;
	int a[n];
	for (int i = 0; i < n; i++) cin >> a[i];
	
	w += daochuoi(w);
	while (w.size() <= MAX) w += w;
		
	for (int i = 0; i < n; i++) cout << w[a[i]] << endl;
}
