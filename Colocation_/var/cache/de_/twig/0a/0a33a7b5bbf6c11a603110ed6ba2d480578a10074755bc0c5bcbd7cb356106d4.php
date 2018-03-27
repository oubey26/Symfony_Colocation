<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_659c8171b6d059035006e11e40f47dbc4be58bad9fcc86177f29b11207110d77 extends Twig_Template
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
        $__internal_0cdbf7129185cf234f083a39f184225ddbcfd3127dc65296d650badbad720ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdbf7129185cf234f083a39f184225ddbcfd3127dc65296d650badbad720ec5->enter($__internal_0cdbf7129185cf234f083a39f184225ddbcfd3127dc65296d650badbad720ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_19c9673d7598d9f8f14d35449767c39c88de892599911b9c3b9dc609a37a5416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c9673d7598d9f8f14d35449767c39c88de892599911b9c3b9dc609a37a5416->enter($__internal_19c9673d7598d9f8f14d35449767c39c88de892599911b9c3b9dc609a37a5416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0cdbf7129185cf234f083a39f184225ddbcfd3127dc65296d650badbad720ec5->leave($__internal_0cdbf7129185cf234f083a39f184225ddbcfd3127dc65296d650badbad720ec5_prof);

        
        $__internal_19c9673d7598d9f8f14d35449767c39c88de892599911b9c3b9dc609a37a5416->leave($__internal_19c9673d7598d9f8f14d35449767c39c88de892599911b9c3b9dc609a37a5416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
