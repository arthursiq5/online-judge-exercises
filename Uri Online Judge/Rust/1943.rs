use std::io::{stdin};

fn main() {
    let mut colocacao = String::new();
    stdin().read_line(&mut colocacao).expect("Input error");
    let colocacao :u8 = colocacao.trim().parse().expect("Parse error");

    let top_x = [1, 3, 5, 10, 25, 50, 100];

    for i in 0..top_x.len() {
        if colocacao <= top_x[i] {
            println!("Top {}", top_x[i]);
            break;
        }
    }
}
