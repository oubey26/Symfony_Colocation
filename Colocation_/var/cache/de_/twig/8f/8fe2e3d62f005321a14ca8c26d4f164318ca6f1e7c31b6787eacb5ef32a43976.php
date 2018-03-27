<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c1a589c54a47a9addd0478260564438e1ebccee8756cb1481f81d4d863302591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff82b0967ca9922e8135ce90ab7ec2cc99ce38dc8398f908131b7cc9cb19c23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff82b0967ca9922e8135ce90ab7ec2cc99ce38dc8398f908131b7cc9cb19c23f->enter($__internal_ff82b0967ca9922e8135ce90ab7ec2cc99ce38dc8398f908131b7cc9cb19c23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_f924ab8a912989c1508174abebbd04e512258399568f23a0bf2c2cd81a7e9bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f924ab8a912989c1508174abebbd04e512258399568f23a0bf2c2cd81a7e9bc5->enter($__internal_f924ab8a912989c1508174abebbd04e512258399568f23a0bf2c2cd81a7e9bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff82b0967ca9922e8135ce90ab7ec2cc99ce38dc8398f908131b7cc9cb19c23f->leave($__internal_ff82b0967ca9922e8135ce90ab7ec2cc99ce38dc8398f908131b7cc9cb19c23f_prof);

        
        $__internal_f924ab8a912989c1508174abebbd04e512258399568f23a0bf2c2cd81a7e9bc5->leave($__internal_f924ab8a912989c1508174abebbd04e512258399568f23a0bf2c2cd81a7e9bc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56b5d149437b8d094ab2bcd63b58473437e2a0ebd0e018e892de0d61f7c96cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b5d149437b8d094ab2bcd63b58473437e2a0ebd0e018e892de0d61f7c96cc9->enter($__internal_56b5d149437b8d094ab2bcd63b58473437e2a0ebd0e018e892de0d61f7c96cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50805e3a8d574f96af10c88fc4a704fda666e244ecf80a2a776583800bb5edc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50805e3a8d574f96af10c88fc4a704fda666e244ecf80a2a776583800bb5edc7->enter($__internal_50805e3a8d574f96af10c88fc4a704fda666e244ecf80a2a776583800bb5edc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_50805e3a8d574f96af10c88fc4a704fda666e244ecf80a2a776583800bb5edc7->leave($__internal_50805e3a8d574f96af10c88fc4a704fda666e244ecf80a2a776583800bb5edc7_prof);

        
        $__internal_56b5d149437b8d094ab2bcd63b58473437e2a0ebd0e018e892de0d61f7c96cc9->leave($__internal_56b5d149437b8d094ab2bcd63b58473437e2a0ebd0e018e892de0d61f7c96cc9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
