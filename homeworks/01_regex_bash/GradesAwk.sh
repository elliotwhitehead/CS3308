#! /bin/bash
awk '{ sum=0; for (col=4; col<=6; col++) sum+=$col; print int(sum/3); }' $1