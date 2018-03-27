<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_136f212623391702d2a7792bb456d578f3d9c8caf76ea6a162aa9370804e635a extends Twig_Template
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
        $__internal_8657fb2ffe7bdc40d04694187ac64204eeeff40d8d76c672708da63d482f558b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8657fb2ffe7bdc40d04694187ac64204eeeff40d8d76c672708da63d482f558b->enter($__internal_8657fb2ffe7bdc40d04694187ac64204eeeff40d8d76c672708da63d482f558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6e80cf6b63486d5f5c46700e0647b605c0a1714b92928ea0c58a620cd84f025f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e80cf6b63486d5f5c46700e0647b605c0a1714b92928ea0c58a620cd84f025f->enter($__internal_6e80cf6b63486d5f5c46700e0647b605c0a1714b92928ea0c58a620cd84f025f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8657fb2ffe7bdc40d04694187ac64204eeeff40d8d76c672708da63d482f558b->leave($__internal_8657fb2ffe7bdc40d04694187ac64204eeeff40d8d76c672708da63d482f558b_prof);

        
        $__internal_6e80cf6b63486d5f5c46700e0647b605c0a1714b92928ea0c58a620cd84f025f->leave($__internal_6e80cf6b63486d5f5c46700e0647b605c0a1714b92928ea0c58a620cd84f025f_prof);

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
