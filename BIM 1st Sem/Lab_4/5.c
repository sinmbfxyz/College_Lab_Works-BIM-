#include<stdio.h>

void main() {
	int i,sum1=0,sum2=0;
	for(i=1; i<=100; i++) {
		if(i%2==0) {
			sum1+=i;

		} else {
			sum2+=i;

		}
	}
	printf("The sum of even numbers from 1 to 100 = %d\n",sum1);
	printf("The sum of odd numbers from 1 to 100 = %d\n",sum2);
}
