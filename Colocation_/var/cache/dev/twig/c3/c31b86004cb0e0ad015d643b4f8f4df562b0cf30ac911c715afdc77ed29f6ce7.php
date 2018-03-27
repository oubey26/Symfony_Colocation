<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2b0ff34231c873d5faf201cffdacdf90279e23ea5855d91d77c1aab020e2820b extends Twig_Template
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
        $__internal_7d923f9a0ba64305565151059d65e8313b84ecc7754e4cee42050e6301c63ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d923f9a0ba64305565151059d65e8313b84ecc7754e4cee42050e6301c63ae4->enter($__internal_7d923f9a0ba64305565151059d65e8313b84ecc7754e4cee42050e6301c63ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6377bdb7c718815f7646ddad7eea9e71c55d985c9f1c587cf5c4bc9ad462a684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6377bdb7c718815f7646ddad7eea9e71c55d985c9f1c587cf5c4bc9ad462a684->enter($__internal_6377bdb7c718815f7646ddad7eea9e71c55d985c9f1c587cf5c4bc9ad462a684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7d923f9a0ba64305565151059d65e8313b84ecc7754e4cee42050e6301c63ae4->leave($__internal_7d923f9a0ba64305565151059d65e8313b84ecc7754e4cee42050e6301c63ae4_prof);

        
        $__internal_6377bdb7c718815f7646ddad7eea9e71c55d985c9f1c587cf5c4bc9ad462a684->leave($__internal_6377bdb7c718815f7646ddad7eea9e71c55d985c9f1c587cf5c4bc9ad462a684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
