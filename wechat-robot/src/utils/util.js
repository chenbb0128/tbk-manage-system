export function arrayResolve(arr, chunkNum) {
  const result = []
  for (let i = 0; i < arr.length; i += chunkNum)
    result.push(arr.slice(i, i + chunkNum))

  return result
}

export function randomNum(minNum, maxNum) {
  return parseInt(String(Math.random() * (maxNum - minNum + 1) + minNum), 10)
}

