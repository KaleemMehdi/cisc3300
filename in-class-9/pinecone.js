function findPinecone(testString) {
   return testString.includes('pinecone')
}

stringArray = ['The pinecone is good', 'I am good', 'The weather is good']

const cats5 = stringArray.filter(findPinecone)
console.log(cats5) 
