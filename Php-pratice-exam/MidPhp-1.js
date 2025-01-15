
function MissingWord(txt) {
    let Char = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
    'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
    'u', 'v', 'w', 'x', 'y', 'z'];

    let Text = txt.toLowerCase()
    let Start = Char.indexOf(Text[0])
    let End = Char.indexOf(Text[Text.length - 1])
    let Result = []
    let count

    for (; Start <= End; Start++) {
        count = 0
        for (let i = 0; i < Text.length; i++){
            if (Char[Start] == Text[i]) break
            else count++
        }
        if (count == Text.length) Result.push(Char[Start])
    }
    console.log(Result)
}

MissingWord('ABDEFH')
MissingWord('Bbdefh')
MissingWord('CgGhiJJko')