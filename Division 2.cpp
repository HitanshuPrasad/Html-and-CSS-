#include <iostream>
using namespace std;


void solve(){
    int n;
    cin>>n;
    string s;
    cin>>s;

    int Q=0,A=0;

    if(s[n-1]=='Q'){
        cout<<"No"<<endl;
        return;
    }

    int qq=0;
    for(int i=0;i<n;i++){
        if(s[i]=='Q'){
            if(qq<=0){
                qq=0;
                qq++;
            }
            else{
                qq++;
            }
        }
        else{
            qq--;
        }

    }


    if(qq<=0){
        cout<<"Yes"<<endl;
    }
    else{
        cout<<"No"<<endl;
    }

    return;
}


int main(){
    int N;
    cin>>N;

    while(N){
        solve();
        N--;
    }


    return 0;
}
