const e = React.createElement;

class LifeImgWrapper extends React.Component{
    constructor(props){
        super(props);
        this.state = {
            hover: false,
            message: ""
        };
        this.hoverOn = this.hoverOn.bind(this);
        this.hoverOff = this.hoverOff.bind(this);
    }

    
    hoverOn(e) {
        this.setState({
            hover: true,
            message: "Life"
        })
    }

    hoverOff(e) {
        this.setState({
            hover: false,
            message: ""
        })
    }


    render() {
        return e("image", {
            onMouseOver: () => this.hoverOn(),
            onMouseOut: () => this.hoverOff()
            },
            "Hello"
        );
    }
}

const LifeContainer = document.querySelector('#life_image');
ReactDOM.render(e(LifeImgWrapper), LifeContainer);