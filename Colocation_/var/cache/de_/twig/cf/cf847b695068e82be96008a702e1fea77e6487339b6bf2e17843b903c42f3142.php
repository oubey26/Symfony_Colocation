<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_afd817de80331d7478e8bcc3f8628648f2e735ec064a2e862a04865a91c2bcdf extends Twig_Template
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
        $__internal_a54a2814fed06b07d1352a224b424178df0ee948e2999502ab7cf699ccaa5879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54a2814fed06b07d1352a224b424178df0ee948e2999502ab7cf699ccaa5879->enter($__internal_a54a2814fed06b07d1352a224b424178df0ee948e2999502ab7cf699ccaa5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d00ab903da4b9b36fc10ed25e0f65a33098abfa21a1e1d767211d8fc4b22b190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00ab903da4b9b36fc10ed25e0f65a33098abfa21a1e1d767211d8fc4b22b190->enter($__internal_d00ab903da4b9b36fc10ed25e0f65a33098abfa21a1e1d767211d8fc4b22b190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a54a2814fed06b07d1352a224b424178df0ee948e2999502ab7cf699ccaa5879->leave($__internal_a54a2814fed06b07d1352a224b424178df0ee948e2999502ab7cf699ccaa5879_prof);

        
        $__internal_d00ab903da4b9b36fc10ed25e0f65a33098abfa21a1e1d767211d8fc4b22b190->leave($__internal_d00ab903da4b9b36fc10ed25e0f65a33098abfa21a1e1d767211d8fc4b22b190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
