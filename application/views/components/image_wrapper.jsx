class ImgWrapper extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            hover: false,
            message: "",
            css_class: "second_class"
        };
        this.hoverOn = this.hoverOn.bind(this);
        this.hoverOff = this.hoverOff.bind(this);
    }
    
    hoverOn() {
        console.log("Hover On!")
        this.setState({
            hover: true,
        })
        
        console.log(this.state);
    }

    hoverOff() {
        console.log("Hover Off!")
        this.setState({
            hover: false,
        })
    }

    render() {
        return (
            <div>
                <div className="img-container">
                    <img id="img_categories" className={this.state.css_class} src={ this.props.url } onMouseOver={ this.hoverOn } onMouseLeave={ this.hoverOff } />
                    <a href={this.props.link}>
                        <div className="overlay">
                            <div className="center_text">{ this.props.text } </div>
                        </div>
                    </a>
                </div>
            </div>            
        );
    }
}

const ImageContainer_1 = document.querySelector("#image_category1");
const ImageContainer_2 = document.querySelector("#image_category2");
const ImageContainer_3 = document.querySelector("#image_category3");
if(ImageContainer_1) {
    ReactDOM.render(<ImgWrapper url={"application/views/components/cityscape.jpg"} text={"LIFE"} link={"application/views/life_articles.php"} />, ImageContainer_1);
}
if(ImageContainer_2) {
    ReactDOM.render(<ImgWrapper url={"application/views/components/food.jpg"} text={"FOOD"} link={"application/views/food_articles.php"} />, ImageContainer_2);
}
if(ImageContainer_3) {
    ReactDOM.render(<ImgWrapper url={"application/views/components/vgcontrollers.jpg"} text={"GAMES"} link={"application/views/game_articles.php"} />, ImageContainer_3);
}