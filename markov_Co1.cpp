
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
	string str[2000];
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
	

	mfile << word1;
	mfile << ' ';
	
	
	
	string can[2000];
	for (int y = 0;y < 144;y++) {
		int x = 0;

		for (int z = 0;z < i;z++) {
			if (word1 == str[z] ) {
				can[x] = str[z + 1];

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


		word1 = can[x];
		
		mfile << ' ';
		if (word1 == str[i-1] )
		   break;
	

	}
	return 0;
}
