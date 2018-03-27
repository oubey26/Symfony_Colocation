<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_49e8a81685c289ee86b9af976ac2c4bab02ebb788ffa4753cf727f4972e262f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0beb3951be14181be4d37bf07a08289fd029ae4ea826f5c46a3a8267a7cf8952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0beb3951be14181be4d37bf07a08289fd029ae4ea826f5c46a3a8267a7cf8952->enter($__internal_0beb3951be14181be4d37bf07a08289fd029ae4ea826f5c46a3a8267a7cf8952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7772aef623b6d33c18617b4369293718e5edfd5cbfc7b8898b026c970ab0b240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7772aef623b6d33c18617b4369293718e5edfd5cbfc7b8898b026c970ab0b240->enter($__internal_7772aef623b6d33c18617b4369293718e5edfd5cbfc7b8898b026c970ab0b240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0beb3951be14181be4d37bf07a08289fd029ae4ea826f5c46a3a8267a7cf8952->leave($__internal_0beb3951be14181be4d37bf07a08289fd029ae4ea826f5c46a3a8267a7cf8952_prof);

        
        $__internal_7772aef623b6d33c18617b4369293718e5edfd5cbfc7b8898b026c970ab0b240->leave($__internal_7772aef623b6d33c18617b4369293718e5edfd5cbfc7b8898b026c970ab0b240_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
