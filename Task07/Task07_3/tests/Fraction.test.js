import Fraction from '../src/Fraction'

test('toString', () => {
    expect(new Fraction(7, 2).toString()).toBe('3\'1/2')
})

test('getNumer', () => {
    expect(new Fraction(1, 2).numer).toBe(1)
})

test('getDenom', () => {
    expect(new Fraction(1, 2).denom).toBe(2)
})

test('add', () => {
    const frac1 = new Fraction(2, 14)
    const frac2 = new Fraction(3, 7)
    expect(frac1.add(frac2).toString()).toBe('4/7')
})

test('sub', () => {
    const frac1 = new Fraction(3, 5)
    const frac2 = new Fraction(2, 5)
    expect(frac1.sub(frac2).toString()).toBe('1/5')
})