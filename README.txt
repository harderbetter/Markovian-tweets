To run the generator first run the 111.php file on C9, after website establishedwe have 2 ways to run the generator

1. Download the bot file, use bot to auto run the website and grab the twitters of username fengm_udel, then generate the twitter of that user's style.

The sequnce of the code is we input the username of fengm_udel, the web crawler use that name to find the twitter username on the tweet website, grab its data and write it in the inputt in tweet.txt file for markov text generator to process, after that text was write in markov_tweet.txt and also return to website to print on the screen.  

2. Also, we can simply open the url and write the sample text on the website to generate text of that style.

This sequnce is much simplier, just write sample text in tweet.txt and use markov text generator to process and then return the outcome in text file and screen.

The Markov text generator use chain of length 1. And the maximum sample text input is 2000. 
***********************************************************************************************************
Markovian-tweets project description:

Consume a text file with sentences and produce a tweet (< 145 characters) with the style of the input text. I have accomplished 3 layers success in this project. Level 1 does the base Markov Sentence Generation from the sample text. (Google around and you'll find lots of info on this part.) Layer 2: Consume a Twitter username and create a sample of that person's tweets, then generate a tweet in their style. Layer 3: Create a bot which accepts username and tweets a message in that user's style.

 
 
