import cityscape from "./cityscape.jpg";

const e = React.createElement;

class LifeImgWrapper extends React.Component{
    constructor(props){
        super(props);
        this.state = { hover: false };
    }

    onMouseOver(e) {
        this.setState({ hover: true })
        e.target.style.background = 'red';
    }

    onMouseOut(e) {
        this.setState({ hover: false})
        e.target.style.background = "";
    }


    render() {
        <img src={cityscape} alt="A cityscape" />
        return e(
            { onMouseOver: () => this.onMouseOver },
            { onMouseOut: () => this.onMouseOut }
        );
    }
}

const LifeContainer = document.querySelector('#life_image');
ReactDOM.render(e(LifeImgWrapper), LifeContainer);