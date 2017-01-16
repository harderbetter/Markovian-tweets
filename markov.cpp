// ConsoleApplication1.cpp : Defines the entry point for the console application.
//

#include <iostream>
#include <stdlib.h> 
#include <fstream>
#include <string>
#include <time.h>
using namespace std;


int main()
{
	srand((unsigned)time(NULL));
	string line;
	string str[150];
	string word;
	ifstream tfile("tweet.txt");
	ofstream mfile("markov-tweet.txt");
	int i=0;
	if (tfile.is_open())
	{
		while (tfile >> word)
		{
	
			str[i] = word;
			i++;

		}
		tfile.close();
	}
	
	else cout << "Unable to open file";
	string word1 = str[0];
	string word2 = str[1];

	mfile << word1;
	mfile << ' ';
	mfile << word2;
	mfile << ' ';
	
	
	string can[145];
	for (int y = 0;y < i-2;y++) {
		int x = 0;

		for (int z = 0;z < i;z++) {
			if (word1 == str[z] && word2 == str[z + 1]) {
				can[x] = str[z + 2];

				x++;
			}


		}
		if (x != 1) {

	
			x = rand() %(x);
		}
		else {
			x = 0;
		}

		mfile << can[x];


		word1 = word2;
		word2 = can[x];
		mfile << ' ';
		if (word1 == str[i-2] && word2 == str[i-1])
			break;

	}
	return 0;
}
