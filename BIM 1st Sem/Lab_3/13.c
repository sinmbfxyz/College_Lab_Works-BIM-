#include<stdio.h>

void main(){
	char ch;
	printf("Enter a character: ");
	scanf("%c",&ch);
	if((ch>='A' && ch<='Z') || (ch>='a' && ch<='z')){
		printf("Alphabet");
	}
	else if(ch>='0' && ch<='9'){
		printf("Digit");
	}
	else{
		printf("Special Character");
	}
}
