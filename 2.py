import urllib
import sys
import types
from BeautifulSoup import *

def function(url):

	
	url = 'https://twitter.com/'+url
	html = urllib.urlopen(url).read()
	handle = open('tweet.txt','w')
	soup = BeautifulSoup(html)


	tags = soup('p')
	for tag in tags:
		if tag.get('data-aria-label-part',None) == "0" : 
			handle.write(tag.text)

	handle.close()


function(str(sys.argv[1]))
