# IdentifyUsersFromHTTPHeader

As we all know HTTP header contains some information that related with the browser agent.

How specific can we achieve to recognize the identity of that specific user behind the screen? Or could we use the headers' information as a big data source to anlysis the components or distribution of our customers?

This project is used for this and there are maybe a lot we can do.

* [BasicHeaderList.php](http://cs-server.usc.edu:53713/headerlist.php) is a file that list the basic http header. we should start from here.


As we can see from the list, Accept-Language and User-Agent may seem to be the only two part we can use.

### Accept-Language
From [HTTP protocol: ](https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4)
>The Accept-Language request-header field is similar to Accept, but restricts the set of natural languages that are preferred as a response to the request.Each language-range MAY be given an associated quality value which represents an estimate of the user's preference for the languages specified by that range. The quality value defaults to "q=1". 

Supplymental material: A full list of language tag is [IANA Language Subtag Registry](http://www.iana.org/assignments/language-subtag-registry/language-subtag-registry)

So if a language take the most weight, we assume that this language is very likely the mother togue of that person, which maynot always be true. So we may not only decide the linguistic preferences by this and also need to provide an drop-down to let the user change it manually.

At this point, maybe we can combine the IP address and accept-language to imporve the probability of the language setting.

### User-Agent
Let me think about this...


