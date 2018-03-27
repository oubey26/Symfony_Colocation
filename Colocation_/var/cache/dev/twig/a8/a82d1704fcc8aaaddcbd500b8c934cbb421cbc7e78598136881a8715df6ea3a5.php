<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_409d5a525739f5441ddb7c5ba2b2de850be5f52625e3ca0c30ac1243b44fb9ff extends Twig_Template
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
        $__internal_34fd8f50a145579acda29b505bafe79b67be08039747689989b7a68603fd2088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fd8f50a145579acda29b505bafe79b67be08039747689989b7a68603fd2088->enter($__internal_34fd8f50a145579acda29b505bafe79b67be08039747689989b7a68603fd2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_acb3104cc501397277e55eab214d4f9bbc3f0e8c5b2cf69ab12d17f0286d89b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb3104cc501397277e55eab214d4f9bbc3f0e8c5b2cf69ab12d17f0286d89b5->enter($__internal_acb3104cc501397277e55eab214d4f9bbc3f0e8c5b2cf69ab12d17f0286d89b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_34fd8f50a145579acda29b505bafe79b67be08039747689989b7a68603fd2088->leave($__internal_34fd8f50a145579acda29b505bafe79b67be08039747689989b7a68603fd2088_prof);

        
        $__internal_acb3104cc501397277e55eab214d4f9bbc3f0e8c5b2cf69ab12d17f0286d89b5->leave($__internal_acb3104cc501397277e55eab214d4f9bbc3f0e8c5b2cf69ab12d17f0286d89b5_prof);

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
