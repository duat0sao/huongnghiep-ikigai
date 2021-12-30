#include <iostream>
#include <algorithm>
using namespace std;

int main() 
{
    int n;
  	cin>>n;
    int a[n];
    for (int i=0; i<n; i++)   cin>>a[i];
    
    sort(a, a + n);
    int cuoi = a[n-1];
    int count = 0;
    for (int i=n-1; i>=0; i--)
    {
        if(cuoi >= 0)
        {
            if(cuoi <= a[i-1])
                cuoi--;
            count++;
        }
    }
    cout<<count;
    return 0;
}
