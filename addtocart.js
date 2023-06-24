const product = [
    {
        id: 0,
        image: 'https://d30a6s96kk7rhm.cloudfront.net/original/978/169/117/9781691177561.jpg',
        title: 'The Best food recipies from North India',
        price: 5, 
    },
    {
        id: 2,
        image: 'https://m.media-amazon.com/images/I/51sQGc6vKmL._SX260_.jpg',
        title: 'North Indian Recipies',
        price: 3,
    },
    {
        id: 3,
        image: 'https://i.pinimg.com/originals/65/87/f0/6587f0aab536a4765fd2f621d3283ddf.jpg',
        title: 'North Indian Cooking',
        price: 4,
    },
    {
        id: 4,
        image: 'https://rukminim1.flixcart.com/image/832/832/ks0onm80/book/g/3/p/south-indian-cooking-original-imag5zrvujgtegez.jpeg?q=70',
        title: 'South Indian Cooking',
        price: 3,
    },
    {
        id: 5,
        image: 'https://th.bing.com/th/id/R.71a53119c4cdcff8b5dcec41305166bd?rik=RPILyyVaFe28Ug&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9781641527095_p0_v3_s1200x630.jpg&ehk=21D3nVqTUqq4JSnkX2FVFONtDl3onr5cpVNCG6Cyp50%3d&risl=&pid=ImgRaw&r=0',
        title: 'South Indian Cookbook',
        price: 4,

    },
    {
        id: 6,
        image: 'https://th.bing.com/th/id/OIP.ybYeo8L0yeF_MHWe5vb2RwHaE8?pid=ImgDet&rs=1',
        title: 'Southern Flavours',
        price: 4,
    },
    {
        id: 7,
        image: 'https://i.ebayimg.com/images/g/~bIAAOSwQLVcU2xR/s-l400.jpg',
        title: 'Classical Chineese Cookbook',
        price: 3,

    },
    {
        id: 8,
        image: 'https://1.bp.blogspot.com/-uYMV04rh-Sg/XpXAwkx-PkI/AAAAAAAAK9w/mE9YnHG-z6QL1VBgUCCJNvDoH6yZWUY4ACLcBGAsYHQ/s1600/91Yx-ps-eoL.jpg',
        title: 'Easy Chineese Cookbook',
        price: 2,
    },
    {
        id: 9,
        image: 'https://cdn.shopify.com/s/files/1/0292/1933/products/JPCookbookforBegin800.jpg?v=1586217311',
        title: 'Japaneese Cookbook',
        price: 3,
    },
    {
        id: 10,
        image: 'https://www.justonecookbook.com/wp-content/uploads/2013/12/Just-One-Cookbook-Essential-Japanese-Recipes.jpg',
        title: 'Just One Cook Book',
        price: 2,
    }
    
];
const categories = [...new Set(product.map((item)=>{return item}))]
   let i=0;
document.getElementById('root').innerHTML=categories.map((item)=>
{
    var{image,title,price}=item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`

    )

}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a){
    let j=0,total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
        
    }
    else {
        document.getElementById("cartitem").innerHTML = cart.map((items)=>
        {
            var{image, title, price} = items;
            total=total+price;
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>    
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size:15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
        if (total > 0) {
            document.getElementById("total").innerHTML = "$ "+total+".00";
        } else {
            document.getElementById("total").innerHTML = "";
        }
    }
}
