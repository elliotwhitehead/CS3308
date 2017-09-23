#! /bin/bash
# Author: Elliot Whitehead
if [[ $# -eq 0 ]] ; then
	echo 'Usage: RegexAnswers.sh filename'
	exit 0
elif [[ $# -gt 1 ]]; then
	echo 'Usage: RegexAnswers.sh filename'
	exit 0
fi