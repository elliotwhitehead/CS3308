#! /bin/bash
# Author: Elliot Whitehead
if [[ $# -eq 0 ]] ; then
	echo 'Usage: Grades.sh filename'
	exit 0
elif [[ $# -gt 1 ]]; then
	echo 'Usage: Grades.sh filename'
	exit 0
fi

while read ID FIRST LAST SCORE1 SCORE2 SCORE3; do
	avg=`echo "($SCORE1 + $SCORE2 + $SCORE3) / 3" | bc`
	echo $avg [$ID] "$LAST," $FIRST
done < $1 | sort -k 3 -k 4 -k 2
