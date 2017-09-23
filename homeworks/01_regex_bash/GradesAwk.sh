#! /bin/bash
awk '{
	sum=0;
	for(col=4; col<=6; col++)
		sum+=$col;
		printf int(sum/3);
		printf " [";
		printf $1;
		printf "] ";
		printf $3;
		printf ", ";
		print $2;
}' $1 | sort -k 3 -k 2